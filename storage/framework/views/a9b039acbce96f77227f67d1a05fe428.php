<?php $__env->startSection('title', 'Beranda - Tugas Rutin 9'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <div class="bg-white border border-slate-200 rounded-lg p-8 shadow-sm">
        <h1 class="text-3xl font-bold text-slate-900 mb-3"><?php echo e($judul); ?></h1>
        <p class="text-slate-600 text-base mb-6 leading-relaxed"><?php echo e($deskripsi); ?></p>
        <div class="flex flex-wrap gap-3">
            <a href="<?php echo e(route('about')); ?>" class="px-5 py-2.5 bg-blue-600 text-white font-medium text-sm rounded hover:bg-blue-700 transition">Lihat Halaman About</a>
            <a href="<?php echo e(route('contact')); ?>" class="px-5 py-2.5 bg-slate-100 text-slate-700 font-medium text-sm rounded border border-slate-300 hover:bg-slate-200 transition">Hubungi Kami</a>
        </div>
    </div>

    <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Fitur dan Modul yang Diimplementasikan:</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php $__currentLoopData = $fitur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-4 bg-slate-50 border border-slate-200 rounded text-sm text-slate-700 flex items-start gap-3">
                    <span class="w-2 h-2 rounded-full bg-blue-500 mt-1.5 flex-shrink-0"></span>
                    <span><?php echo e($item); ?></span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hype\ExtremeBoy\pemrograman-web\tr9\resources\views/welcome.blade.php ENDPATH**/ ?>