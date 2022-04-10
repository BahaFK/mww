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
    date: Date;
    dueDate: Date;
    area: string;
    finding: string;
    status: number;
}



@Component({
    selector: 'sample',
    templateUrl: './sample.component.html',
    styleUrls: ['./sample.component.scss']
})
export class SampleComponent implements OnInit, OnDestroy {
    fuseConfig: any;
    navigation: any;

    displayedColumns = ['week', 'date', 'dueDate', 'area', 'finding', 'status', 'details'];
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
        const actionDialog = this.dialog.open(ActionModalComponent);
        actionDialog.afterClosed().subscribe((reopen) => {
            this.actionservice.getActions().subscribe((data => {
                this.dataSource = data;
            }));
        });
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

        this.actionservice.getAction(id).subscribe((data => {
            this.dialog.open(DetailsModalComponent, {
                width: '80%',
                height: '80%',
                data : data
            });
        }));
    }

    getClass(element: Action): string {
        const status = this.getStatus(element);
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

    getStatus(element: Action): string
    {
        if (element.status === 100 ){
            return 'done';
        }

        if (new Date().getTime() < new Date(element.dueDate).getTime()){
            return 'in progress';
        }
        return 'overdated';
    }
}
