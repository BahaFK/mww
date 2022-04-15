export interface Action {
    area?: string;
    week?: string;
    date?: Date;
    dueDate?: Date;
    description?: string;
    status?: number;
    finding?: string;
}

export interface Unit {
    id?: number;
    ref: string;
    areas?: Area[];
    section?: string;
    sectionId?: string;
    sectionData?: string;
    name: string;
}
export interface Section {
    id?: number;
    ref: string;
    name: string;
}
export interface Area  {
    id?: number;
    ref?: string;
    unit?: string;
    unitId?: number;
    name?: string;
    unitData?: string;
}
