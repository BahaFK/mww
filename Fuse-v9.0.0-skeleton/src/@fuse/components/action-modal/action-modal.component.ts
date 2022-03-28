import {Component, Inject, OnInit} from '@angular/core';

import {MAT_DIALOG_DATA, MatDialogRef} from '@angular/material/dialog';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';

export interface Unit {
    id: number;
    ref: string;
    areas: Area[];
}

export interface Area {
    id: number;
    ref: string;
    actions?: any;
}

@Component({
    selector: 'app-material-modal',
    templateUrl: './action-modal.component.html',
    styleUrls: ['./action-modal.component.css']
})
export class ActionModalComponent implements OnInit {

    form: FormGroup;

    // Horizontal Stepper
    unitArea: FormGroup;
    actionStep: FormGroup;
    horizontalStepperStep3: FormGroup;
    unitsData: Unit[] = [
        {
            id: 0,
            ref: 'OPT1',
            areas: [
                {id: 0, ref: 'OPT1 - Z1'},
                {id: 1, ref: 'OPT1 - Z2'},
                {id: 2, ref: 'OPT1 - Z3'},
                {id: 3, ref: 'OPT1 - Z4'},
                {id: 4, ref: 'OPT1 - Z5'},
            ]
        },
        {
            id: 1,
            ref: 'OPT2',
            areas: [
                {id: 0, ref: 'OPT2 - Z1'},
                {id: 1, ref: 'OPT2 - Z2'},
                {id: 2, ref: 'OPT2 - Z3'},
                {id: 3, ref: 'OPT2 - Z4'},
                {id: 4, ref: 'OPT2 - Z5'},
            ]
        },
        {
            id: 2,
            ref: 'OPT3',
            areas: [
                {id: 0, ref: 'OPT3 - Z1'},
                {id: 1, ref: 'OPT3 - Z2'},
                {id: 2, ref: 'OPT3 - Z3'},
                {id: 3, ref: 'OPT3 - Z4'},
                {id: 4, ref: 'OPT3 - Z5'},
            ]
        },
    ];
    areasData: Area[];

    constructor(
        @Inject(MAT_DIALOG_DATA) public data: any,
        private dialogRef: MatDialogRef<ActionModalComponent>,
        private _formBuilder: FormBuilder) {
    }

    ngOnInit(): void {

        // Horizontal Stepper form steps
        this.unitArea = this._formBuilder.group({
            unit: ['', Validators.required],
            area: ['', Validators.required]
        });


        this.actionStep = this._formBuilder.group({
            address: ['']
        });

        this.horizontalStepperStep3 = this._formBuilder.group({
            city: [''],
            state: [''],
            postalCode: ['']
        });
    }

    /**
     * Finish the horizontal stepper
     */
    finishHorizontalStepper(): void {
        alert('You have finished the horizontal stepper!');
    }

    getAreas($event): void
    {
        this.areasData = this.unitsData.find(unit => unit.id === $event).areas;

        console.log($event);
    }
}
