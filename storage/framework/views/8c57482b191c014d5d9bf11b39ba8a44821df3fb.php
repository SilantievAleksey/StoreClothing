<?php $__env->startSection('breadcrumbs'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <form action="" method="post" enctype="multipart/form-data" novalidate id="form-create">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label class="mr-sm-2" for="category">Category</label>
            <select class="form-control form-control-lg" name="category" id="category">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php if(!empty(old('$category'))): ?> <?php if(old('$category') == $category->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($category->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label class="mr-sm-2" for="brand">Brand</label>
            <select class="form-control form-control-lg" name="brand" id="brand">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($brand->id); ?>" <?php if(!empty(old('brand'))): ?> <?php if(old('brand') == $brand->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($brand->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?php echo e(old('title')); ?>">
        </div>
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <textarea class="form-control" name="excerpt" id="excerpt" placeholder="Excerpt" rows="7"><?php echo e(old('excerpt')); ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="<?php echo e(old('price')); ?>">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" placeholder="Body" rows="7"><?php echo e(old('body')); ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="create">Create</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/product/cr_up_product.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OpenServer\OSPanel\domains\storeclothing\resources\views/product/create.blade.php ENDPATH**/ ?>