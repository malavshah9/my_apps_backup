import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { TaskCComponent } from './task-c/task-c.component';
import { TaskProService } from './task-pro.service';
import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    TaskCComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule
  ],
  providers: [TaskProService],
  bootstrap: [AppComponent]
})
export class AppModule { }
