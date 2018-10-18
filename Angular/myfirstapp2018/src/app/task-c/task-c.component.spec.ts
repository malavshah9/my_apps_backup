import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TaskCComponent } from './task-c.component';

describe('TaskCComponent', () => {
  let component: TaskCComponent;
  let fixture: ComponentFixture<TaskCComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TaskCComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TaskCComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
