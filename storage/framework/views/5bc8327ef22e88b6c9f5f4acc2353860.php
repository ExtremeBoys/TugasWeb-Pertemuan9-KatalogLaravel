<?php $__env->startSection('title', 'Kontak - Tugas Rutin 9'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm">
        <h1 class="text-2xl font-bold text-slate-900 mb-2">Hubungi Kami</h1>
        <p class="text-slate-600 text-sm">Informasi kontak yang dirender secara dinamis melalui data array controller.</p>
    </div>

    <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm">
        <div class="space-y-4 text-sm max-w-xl">
            <div class="flex flex-col sm:flex-row sm:items-center py-2 border-b border-slate-100">
                <span class="w-40 font-medium text-slate-500">Alamat Email</span>
                <span class="text-slate-800 font-semibold"><?php echo e($kontak['email']); ?></span>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center py-2 border-b border-slate-100">
                <span class="w-40 font-medium text-slate-500">Nomor Telepon</span>
                <span class="text-slate-800 font-semibold"><?php echo e($kontak['telepon']); ?></span>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center py-2 border-b border-slate-100">
                <span class="w-40 font-medium text-slate-500">Lokasi Kampus</span>
                <span class="text-slate-800 font-semibold"><?php echo e($kontak['alamat']); ?></span>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center py-2">
                <span class="w-40 font-medium text-slate-500">Jam Layanan</span>
                <span class="text-slate-800 font-semibold"><?php echo e($kontak['jam_layanan']); ?></span>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hype\ExtremeBoy\pemrograman-web\tr9\resources\views/contact.blade.php ENDPATH**/ ?>