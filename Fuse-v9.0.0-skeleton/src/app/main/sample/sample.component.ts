import {Component, OnDestroy, OnInit} from '@angular/core';

import {FuseTranslationLoaderService} from '@fuse/services/translation-loader.service';

import {locale as english} from './i18n/en';
import {locale as turkish} from './i18n/tr';
import {FuseConfigService} from '../../../@fuse/services/config.service';
import {Subject} from 'rxjs';
import {takeUntil} from 'rxjs/operators';
import {MatDialog} from '@angular/material/dialog';
import {ActionModalComponent} from '../../../@fuse/components/action-modal/action-modal.component';
import {DetailsModalComponent} from '../../../@fuse/components/details-modal/details-modal.component';
import {ActionsService} from '../../services/action.services';
import {Action} from '../../models/action.model';


export interface PeriodicElement {
    id: number;
    week: string;
    date: string;
    due_date: string;
    area: string;
    finding: string;
    plan_status: number;
    act_status: number;
    check_satus: number;
    status: string;
}


export const ELEMENT_DATA: PeriodicElement[] = [
    {id: 1 , week: 'CW01', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'H', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'done'},
    {id: 2 , week: 'CW02', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'He', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'in progress'},
    {id: 3 , week: 'CW03', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'Li', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'done'},
    {id: 4 , week: 'CW04', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'Be', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'in progress'},
    {id: 5 , week: 'CW05', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'B', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'overdated'},
    {id: 6 , week: 'CW06', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'C', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'in progress'},
    {id: 7 , week: 'CW07', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'N', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'done'},
    {id: 8 , week: 'CW08', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'O', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'overdated'},
    {id: 9 , week: 'CW09', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'F', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'in progress'},
    {id: 10 , week: 'CW010', date: new Date().toLocaleString().slice(0, 10), due_date: new Date().toLocaleString().slice(0, 10), area: 'Ne', finding: 'finding ', plan_status: 25, check_satus: 25, act_status: 25, status: 'overdated'},
];

@Component({
    selector: 'sample',
    templateUrl: './sample.component.html',
    styleUrls: ['./sample.component.scss']
})
export class SampleComponent implements OnInit, OnDestroy {
    fuseConfig: any;
    navigation: any;

    displayedColumns = ['week', 'date', 'due_date', 'area', 'finding', 'status', 'details'];//'plan_status', 'act_status', 'check_satus'
    dataSource: Action[] = [];

    // Private
    private _unsubscribeAll: Subject<any>;

    /**
     * Constructor
     *
     * @param {FuseTranslationLoaderService} _fuseTranslationLoaderService
     */
    constructor(
        private _fuseTranslationLoaderService: FuseTranslationLoaderService,
        private _fuseConfigService: FuseConfigService,
        public dialog: MatDialog,
        public actionservice: ActionsService
    ) {
        this._fuseTranslationLoaderService.loadTranslations(english, turkish);

        // Set the private defaults
        this._unsubscribeAll = new Subject();
    }

    /**
     * On init
     */
    ngOnInit(): void {
        // Subscribe to config changes
        this._fuseConfigService.config
            .pipe(takeUntil(this._unsubscribeAll))
            .subscribe((config) => {
                this.fuseConfig = config;
            });
        this.actionservice.getActions().subscribe((data => {
            this.dataSource = data;
        }));
    }

    openActionDialog(): void {
        this.dialog.open(ActionModalComponent);
    }

    /**
     * On destroy
     */
    ngOnDestroy(): void {
        // Unsubscribe from all subscriptions
        this._unsubscribeAll.next();
        this._unsubscribeAll.complete();
    }
    openDialogDetails(id: number): void {
        this.dialog.open(DetailsModalComponent);
    }
    getClass(status){
        switch (status) {
            case 'in progress':
                return 'st-yellow-200';
                break;
            case 'done':
                return 'bg-green-200 text-green-800';
                break;
            case 'overdated':
                return 'bg-red-200 text-red-800';
                break;

        }

}
}
