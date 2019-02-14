    <div class="text-right"><b>Всего сообщений:</b> <i class="badge"><?php echo e($count); ?></i></div>
    <br/>
    <div class="messages">
        <?php if( ! $messages->isEmpty() ): ?>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span><?php echo $message->name; ?></span>
                        <span class="pull-right label label-info"><?php echo $message->date; ?></span>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php echo $message->messages; ?>

                    <hr/>
                    <span><?php echo $message->email; ?></span>
                    <div class="pull-right">
                        <a class="btn btn-info" href="#">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="text-center">
                <?php echo $messages->render(); ?>

            </div>
        </div>
        <?php endif; ?>

