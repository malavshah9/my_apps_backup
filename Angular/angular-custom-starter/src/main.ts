import { enableProdMode } from '@angular/core';
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app/app.module';

declare var PROD;
console.log("prod", PROD);
if (PROD) {
    enableProdMode();
}
platformBrowserDynamic().bootstrapModule(AppModule);
