<div class="modal fade" id="modal-create-user" tabindex="-1" role="dialog" aria-labelledby="modal-create-user" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Создание нового пользователя</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.create-user')); ?>" method="post" id="form-create-user">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <?php
                            $roles = \App\Models\Role::all();
                        ?>
                        <label class="mr-sm-2" for="user-role">Role</label>
                        <select class="form-control form-control-lg" name="role" id="user-role">
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->id); ?>" <?php if(!empty(old('role'))): ?> <?php if(old('role') == $role->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($role->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user-name">Name</label>
                        <input type="text" name="name" class="form-control" id="user-name" placeholder="Name" value="<?php echo e(old('name') ?? ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="user-email">Email</label>
                        <input type="text" name="email" class="form-control" id="user-email" placeholder="Email" value="<?php echo e(old('email') ?? ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="user-password">Password</label>
                        <input type="password" name="password" class="form-control" id="user-password" placeholder="Password" value="<?php echo e(old('password') ?? ''); ?>">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="create-user">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\Programs\OpenServer\OSPanel\domains\storeclothing\resources\views/admin/create_user.blade.php ENDPATH**/ ?>