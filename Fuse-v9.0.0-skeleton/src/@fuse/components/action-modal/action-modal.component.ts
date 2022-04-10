import {Component, Inject, OnInit} from '@angular/core';

import {MAT_DIALOG_DATA, MatDialogRef} from '@angular/material/dialog';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {UnitServices} from '../../../app/services/unit.services';
import {Area, Unit} from '../../../app/models/action.model';
import {ActionsService} from '../../../app/services/action.services';
import {Action} from '../../../app/models/action.model';


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
    unitsData: Unit[] = [];
    areasData: Area[] = [];
    reseted = false;
    unit = '';
    area = '';
    constructor(
        @Inject(MAT_DIALOG_DATA) public data: any,
        private dialogRef: MatDialogRef<ActionModalComponent>,
        private _formBuilder: FormBuilder,
        public unitservice: UnitServices,
        public actionservice: ActionsService
    ) {
    }

    ngOnInit(): void {

        this.formInit();

    }

    formInit(): void{
        this.unitservice.getUnits().subscribe((data => {
            this.unitsData = data;
        }));
        // Horizontal Stepper form steps
        this.unitArea = this._formBuilder.group({
            unit: [this.unit, Validators.required],
            area: [this.area, Validators.required]
        });


        this.actionStep = this._formBuilder.group({
            week: [this.getWeek()],
            date: [new Date()],
            dueDate: [''],
            finding: [''],
            res: [''],
            description: [''],
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
    finishHorizontalStepper(reopen: boolean): void {
        let action: Action = this.unitArea.getRawValue();
        action = {...action, ...this.actionStep.getRawValue()};
        action.area = '/api/areas/' + action.area;
        this.actionservice.addAction(action).subscribe((data) => {
            if (!reopen){
                this.dialogRef.close(reopen);
            }else{
                this.formInit();
                this.reseted = true;

            }
        });
    }

    getAreas($event): void
    {
        this.areasData = this.unitsData.find(unit => unit.id === $event).areas;

    }

    // Returns the ISO week of the date.
    getWeek(): string {
        const currentdate: any = new Date();
        const oneJan: any = new Date(currentdate.getFullYear(), 0, 1);
        const numberOfDays = Math.floor((currentdate - oneJan) / (24 * 60 * 60 * 1000));
        const result = Math.ceil(( currentdate.getDay() + 1 + numberOfDays) / 7) - 1 ;
        return  'CW ' + result;

    }
}
