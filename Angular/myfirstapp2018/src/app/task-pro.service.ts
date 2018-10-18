import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from "@angular/common/http";
import { RequestOptions,Headers } from "@angular/http";
import { task } from "./classtask";

@Injectable({
  providedIn: 'root'
})
export class TaskProService {
  url:string="http://localhost:3000/task/";
  constructor(public http:HttpClient) { }
  GetAllTask(){
    return this.http.get(this.url);
  }
}
