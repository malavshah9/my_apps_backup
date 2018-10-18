import { TestBed } from '@angular/core/testing';

import { TaskProService } from './task-pro.service';

describe('TaskProService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: TaskProService = TestBed.get(TaskProService);
    expect(service).toBeTruthy();
  });
});
