import { Component, OnInit } from '@angular/core';
import { TaskProService } from '../task-pro.service';
import { task } from '../classtask';

@Component({
  selector: 'app-task-c',
  templateUrl: './task-c.component.html',
  styleUrls: ['./task-c.component.css']
})
export class TaskCComponent implements OnInit {

  constructor(public db:TaskProService) { }
  public arr:task[]=[];
  ngOnInit() {
      this.db.GetAllTask().subscribe((data:task[])=>{
        console.log(data);
        this.arr=data;
      });
  }

}
