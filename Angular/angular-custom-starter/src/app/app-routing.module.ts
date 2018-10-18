import { NgModule } from '@angular/core';
import { Routes, RouterModule, PreloadAllModules } from '@angular/router';
import { AuthGuard, GuestGuard } from './shared';

const routes: Routes = [
    /* We use loadChildren for lazy loading */
    {
        path: 'login',
        loadChildren: './login/login.module#LoginModule',
        canActivate: [GuestGuard]
    },
    {
        path: 'about',
        loadChildren: './about/about.module#AboutModule',
    },
    {
        path: 'application',
        loadChildren: './layout/layout.module#LayoutModule',
        canActivate: [AuthGuard]
    },
    /* Any unknown path will redirect user to dashboard if he is logged in, if not
    to login */
    { path: '**', redirectTo: '/application', pathMatch: 'full' }
];

@NgModule({
    imports: [RouterModule.forRoot(routes, {
        useHash: false,
        preloadingStrategy: PreloadAllModules
    })],
    exports: [RouterModule]
})
export class AppRoutingModule { }
