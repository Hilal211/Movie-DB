// @ts-ignore
export interface AppState {
    auth: AuthState
}

export interface AuthState {
    status: boolean,
    formInput: {
        email: string,
        password: string,
    },
    handleEmail
}
