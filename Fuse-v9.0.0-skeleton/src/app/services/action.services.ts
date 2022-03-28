import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs/internal/Observable';
import { environment } from 'environments/environment';
import { Action } from '../models/action.model';

// const httpOptions = {
//     headers: new HttpHeaders({
//       Authorization: localStorage.getItem('jwt')
//     })
//   };

@Injectable({
    providedIn: 'root',
})
export class ActionsService {

    private ActionUrl = `${environment.apiUrl}/action`;
  
    constructor(private http: HttpClient) { }
  
    getActions(): Observable<any> {
      return this.http.get<any>(`${this.ActionUrl}/actions`);
    }
    getAction(id: number): Observable<any> {
        return this.http.get<any>(`${this.ActionUrl}/${id}`);
    }
  
    addAction(action: Action): Observable<any> {
      return this.http.post<any>(`${environment.apiUrl}/action`, action);
    }
  
    editAction(action: Action, id: number): Observable<any> {
      return this.http.put<any>(`${environment.apiUrl}/action/${id}`, action);
    }
  
    deleteAction(id: string): Observable<any> {
      return this.http.delete<any>(`${environment.apiUrl}/action/${id}`);
    }
}
