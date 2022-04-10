import { FuseNavigation } from '@fuse/types';

export const navigation: FuseNavigation[] = [
    {
        id       : 'applications',
        title    : 'Applications',
        // translate: 'NAV.APPLICATIONS',
        type     : 'group',
        children : [
            {
                id       : 'actions',
                title    : 'Actions & Findings',
                // translate: 'NAV.SAMPLE.TITLE',
                type     : 'item',
                icon     : 'done',
                url      : '/action',
                badge    : {
                    // title    : '25',
                    // translate: 'NAV.SAMPLE.BADGE',
                    // bg       : '#F44336',
                    // fg       : '#FFFFFF'
                }
            }
        ]
    },
    {
        id       : 'others',
        title    : 'Autres',
        // translate: 'NAV.APPLICATIONS',
        type     : 'group',
        children : [
            {
                id       : 'area',
                title    : 'Zone',
                // translate: 'NAV.SAMPLE.TITLE',
                type     : 'item',
                icon     : 'done',
                url      : '/area',
                badge    : {
                    // title    : '25',
                    // translate: 'NAV.SAMPLE.BADGE',
                    // bg       : '#F44336',
                    // fg       : '#FFFFFF'
                }
            },
            {
                id       : 'unit',
                title    : 'Unité',
                // translate: 'NAV.SAMPLE.TITLE',
                type     : 'item',
                icon     : 'done',
                url      : '/unit',
                badge    : {
                    // title    : '25',
                    // translate: 'NAV.SAMPLE.BADGE',
                    // bg       : '#F44336',
                    // fg       : '#FFFFFF'
                }
            }
        ]
    }
];
