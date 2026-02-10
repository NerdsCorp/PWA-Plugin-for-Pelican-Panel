<?php

// PHPStan bootstrap file - provides stubs for Laravel/Filament classes
// These classes will be available at runtime when the plugin is loaded

namespace Illuminate\Routing {
    class Controller {}
}

namespace Illuminate\Database\Eloquent {
    class Model {
        public static function query() {}
        public function morphTo() {}
        public function delete() {}
        public function getKey() {}
    }
}

namespace Illuminate\Support {
    class ServiceProvider {
        protected function loadMigrationsFrom() {}
        protected function loadViewsFrom() {}
    }
}

namespace Illuminate\Foundation\Support\Providers {
    class RouteServiceProvider extends \Illuminate\Support\ServiceProvider {
        protected function routes() {}
    }
}

namespace Illuminate\Contracts\Queue {
    interface ShouldQueue {}
}

namespace Illuminate\Foundation\Bus {
    trait Dispatchable {
        public static function dispatch() {}
    }
}

namespace Illuminate\Queue {
    trait InteractsWithQueue {}
    trait SerializesModels {}
}

namespace Illuminate\Bus {
    trait Queueable {}
}

namespace Filament\Pages {
    class Page {}
}

namespace Filament\Schemas\Contracts {
    interface HasSchemas {}
}

namespace Filament\Forms\Concerns {
    trait InteractsWithForms {}
}

namespace Filament\Contracts {
    interface Plugin {}
}
