<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>
        <p class="lead">You have successfully created your Yii-powered application.</p>
    </div>

    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Emp ID</th>
                        <th scope="col">Emp Name</th>
                        <th scope="col">Emp Department</th>
                        <th scope="col">Action</th>
                        <th scope="col">View Report</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th scope="row">1</th>
                        <td>sample data</td>
                        <td>sample data</td>
                        <td>sample data</td>
                        <td>
                            <span><?= Html::a('View') ?></span>
                            <span><?= Html::a('Update') ?></span>
                            <span><?= Html::a('Delete') ?></span>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
