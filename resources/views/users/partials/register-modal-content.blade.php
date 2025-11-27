<div class="text-center mb-8">
    <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white">Crear Cuenta</h1>
    <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
        Completa los datos para comenzar
    </p>
</div>

<form method="POST" action="{{ route('users.store') }}" class="space-y-5">
    @csrf

    <div>
        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nombre completo</label>
        <input type="text" name="name" required class="w-full px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900">
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Email</label>
        <input type="email" name="email" required class="w-full px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900">
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Contraseña</label>
        <input type="password" name="password" required class="w-full px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900">
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" required class="w-full px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900">
    </div>

    <button type="submit" class="w-full py-3 bg-brand-500 text-white font-bold rounded-xl shadow-lg hover:bg-brand-600 transition">
        Crear Cuenta
    </button>
</form>

<div class="mt-6 text-center text-sm text-slate-500 dark:text-slate-400">
    ¿Ya tienes cuenta?
    <a href="#" class="trigger-login text-brand-500 font-bold hover:underline">Iniciar Sesión</a>
</div>
