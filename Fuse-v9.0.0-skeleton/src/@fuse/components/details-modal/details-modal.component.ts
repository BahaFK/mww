import {Component, Inject, OnInit} from '@angular/core';

import {MAT_DIALOG_DATA, MatDialogRef} from '@angular/material/dialog';
import {FormBuilder} from '@angular/forms';
import {PeriodicElement} from '../../../app/main/sample/sample.component';
import {ProgressSpinnerMode} from '@angular/material/progress-spinner';

@Component({
    selector: 'app-material-modal',
    templateUrl: './details-modal.component.html',
    styleUrls: ['./details-modal.component.scss']
})

export class DetailsModalComponent implements OnInit {

    progressBarMode: ProgressSpinnerMode = 'determinate';

    constructor(
        @Inject(MAT_DIALOG_DATA) public data: PeriodicElement,
        private dialogRef: MatDialogRef<DetailsModalComponent>,
        private _formBuilder: FormBuilder) {
    }

    ngOnInit(): void {

    }

    get color(): any {
        switch( this.data.status){
        case 25:
        return 'red-spinner';
        case 50:
        return 'orange-spinner';
        case 75:
        return 'blue-spinner';
        case 100:
        return 'green-spinner';

    }
}
}
