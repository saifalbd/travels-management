declare interface Window {
    axios : Axios;
    iq:Record<string,Function>

    educations:Education[]
    [prop:string]:any

}


declare interface Attend {
    student_id:number;
    id:number;
    remark: null |string
    entry: null | string;
    leave: null | string
    attend: null | boolean | number
    dayNumber: string
    date: string
    isAfter: boolean
    off_day: boolean
}



declare interface Education {
    id?:number
    degree:string | null
    board:string | null
    institute:string | null
    group:string | null
    year_of_pass:string | null
    status:string
    gpa:string | null
}