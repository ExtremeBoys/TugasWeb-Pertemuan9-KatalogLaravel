<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Tugas Rutin 9 - Laravel Setup'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">
    <nav class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 py-4 flex flex-wrap justify-between items-center gap-4">
            <a href="<?php echo e(route('home')); ?>" class="text-xl font-bold text-blue-600">TugasWeb-P9</a>
            <div class="flex items-center gap-6 text-sm font-medium">
                <a href="<?php echo e(route('home')); ?>" class="hover:text-blue-600 transition">Beranda</a>
                <a href="<?php echo e(route('about')); ?>" class="hover:text-blue-600 transition">About</a>
                <a href="<?php echo e(route('contact')); ?>" class="hover:text-blue-600 transition">Contact</a>
                <a href="<?php echo e(route('hello', ['nama' => 'Mahasiswa'])); ?>" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100 transition">Route Param</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-5xl mx-auto px-4 py-8 w-full">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="bg-white border-t border-slate-200 py-6 text-center text-sm text-slate-500">
        <p>&copy; 2026 Pemrograman Web - Tugas Rutin 9 Laravel Setup</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Hype\ExtremeBoy\pemrograman-web\tr9\resources\views/layouts/app.blade.php ENDPATH**/ ?>