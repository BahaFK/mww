export interface Action   {
    id?: number;
    findings?: string;
    area?: string;
    resp?: string;
    week?: string;
    date?: Date;
    due_date?: Date;
    description?: string;
    plan_status?: number;
    do_status?: number;
    check_status?: number;
    act_status?: number;
    photo_before?: string;
    photo_after?: string;
    createdAt?: Date;
    updatedAt?: Date;
    dueDate?: Date;
    planStatus?: number;
    doStatus?: number;
    checkStatus?: number;
    actStatus?: number;
    photoBefore?: string;
    photoAfter?: string;

}
