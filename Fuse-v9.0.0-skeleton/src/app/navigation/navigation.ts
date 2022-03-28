import { FuseNavigation } from '@fuse/types';

export const navigation: FuseNavigation[] = [
    {
        id       : 'applications',
        title    : 'Applications',
        translate: 'NAV.APPLICATIONS',
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
    }
];
