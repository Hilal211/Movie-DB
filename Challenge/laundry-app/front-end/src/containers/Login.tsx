import React, {Component} from 'react';

import LoginComponent from '../components/Login';

class Login extends Component<any, any> {

    constructor(props: any) {
        super(props);

    }

    render() {

        return (
            <>
                <LoginComponent />
            </>
        )
    }

}

export default Login;
