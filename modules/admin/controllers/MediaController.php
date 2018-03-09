<?php

namespace app\modules\admin\controllers;

use app\helpers\Encription;
use Yii;
use app\models\Media;
use app\models\search\MediaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MediaController implements the CRUD actions for Media model.
 */
class MediaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'remove-image' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Media models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MediaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Media model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * @param $identity
     * @return string|\yii\web\Response
     */
    public function actionUpload($identity, $type)
    {
        $request = Yii::$app->getRequest();


        if ($request->isAjax) {
            if ($type == Media::AVATAR) {
                $old = Media::find()->where(['identity' => $identity]);
                if ($old->exists()) {

                    $media = $old->one();
                    $this->Unlink(json_decode($media->image)[0]->file_path);
                    $media->delete();
                }
            } elseif ($type == Media::ADDITIONAL_IMAGE) {
                $old = Media::find()->where(['identity' => $identity]);
                if ($old->exists()) {
                    $model = $old->one();
                    $file = $model->upload(UploadedFile::getInstance($model, 'uploads'), $model->image);
                    if ($file) {
                        $model->image = $file;
                        //  $model->identity = $identity;
                        if ($model->save(false)) {
                            return json_encode("Successfully Uploaded");
                        } else {
                            return json_encode(['error', 'upload failed']);
                        }

                    }
                }
            }

            $model = new Media();


            $file = $model->upload(UploadedFile::getInstance($model, 'uploads'));
            if ($file) {
                $model->image = $file;
                $model->identity = $identity;
                if ($model->save(false)) {
                    return json_encode("Successfully Uploaded");
                } else {
                    return json_encode(['error', 'upload failed']);
                }

            }
        }


    }

    /**
     * Updates an existing Media model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function Unlink($directory, $oldFiles = false)
    {

        if (is_file($directory)) {
            unlink($directory);
        }
        if ($oldFiles) {
            $oldFiles = json_decode($oldFiles, true);

            foreach ($oldFiles as $key => $value) {
                if (in_array($directory, $value)) {
                    unset($oldFiles[$key]);
                }
            }
            if (is_array($oldFiles)) {
                $count = count($oldFiles);
                if ($count <= 0) {
                    return null;
                }

            }
            return json_encode($oldFiles);

        }
        return null;


    }

    /**
     * Deletes an existing Media model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionRemoveImage($file, $id, $type)
    {
        $model = $this->findModel(intval(Encription::decryptIt($id)));
        $image = $this->Unlink($file, $model->image);
        if ($type == Media::AVATAR) {
            $model->delete();
        } elseif ($type == Media::ADDITIONAL_IMAGE) {
            if ($image == null) {
                $model->delete();
            } else {
                $model->image = $image;
                $model->save(false);
            }

        }
        echo json_encode("Image has been removed");


    }

    /**
     * Finds the Media model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Media the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Media::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
