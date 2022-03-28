import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

import { FlexLayoutModule } from '@angular/flex-layout';

import { FuseDirectivesModule } from '@fuse/directives/directives';
import { FusePipesModule } from '@fuse/pipes/pipes.module';
import {ActionModalComponent} from './components/action-modal/action-modal.component';
import {MatDialogModule} from '@angular/material/dialog';
import {MatInputModule} from '@angular/material/input';
import {MatStepperModule} from '@angular/material/stepper';
import {MatSelectModule} from '@angular/material/select';
import {MatButtonModule} from '@angular/material/button';
import {DetailsModalComponent} from './components/details-modal/details-modal.component';
import {MatBadgeModule} from '@angular/material/badge';

@NgModule({

    declarations: [
        ActionModalComponent,
        DetailsModalComponent
    ],
    imports  : [
        CommonModule,
        FormsModule,
        ReactiveFormsModule,
        FlexLayoutModule,
        MatDialogModule,
        FuseDirectivesModule,
        FusePipesModule,
        MatSelectModule,
        MatButtonModule,
        MatStepperModule,
        MatInputModule,
        MatBadgeModule

],
    exports  : [
        CommonModule,
        FormsModule,
        ReactiveFormsModule,

        FlexLayoutModule,

        FuseDirectivesModule,
        FusePipesModule
    ]
})
export class FuseSharedModule
{
}
