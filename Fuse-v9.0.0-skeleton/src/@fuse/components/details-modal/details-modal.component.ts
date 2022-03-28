import {Component, Inject, OnInit} from '@angular/core';

import {MAT_DIALOG_DATA, MatDialogRef} from '@angular/material/dialog';
import {FormBuilder, FormGroup} from '@angular/forms';
import {PeriodicElement} from '../../../app/main/sample/sample.component';
export  const ELEMENT_DATA: PeriodicElement =
    {
        id: 1,
        week: 'CW01',
        date: new Date().toLocaleString().slice(0, 10),
        due_date: new Date().toLocaleString().slice(0, 10),
        area: 'H',
        finding: 'finding ',
        plan_status: 25,
        check_satus: 25,
        act_status: 25,
        status: 'done'
    };
@Component({
    selector: 'app-material-modal',
    templateUrl: './details-modal.component.html',
    styleUrls: ['./details-modal.component.scss']
})

export class DetailsModalComponent implements OnInit {

    element: PeriodicElement;

    constructor(
        @Inject(MAT_DIALOG_DATA) public data: any,
        private dialogRef: MatDialogRef<DetailsModalComponent>,
        private _formBuilder: FormBuilder) {
    }

    ngOnInit(): void {

       this.element = ELEMENT_DATA;

    }
}
