<div {{ $attributes->class('bg-white dark:bg-white/10 border border-zinc-200 dark:border-white/10 [:where(&)]:p-6 [:where(&)]:rounded-xl') }} data-flux-card>
    {{ $slot }}
</div>
