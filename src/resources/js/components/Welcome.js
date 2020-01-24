import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import styled from 'styled-components';


const WelcomeWrapper = styled.div`
html,
body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links>a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
`


export default class Welcome extends Component {
    render() {
        return (
            <WelcomeWrapper className="flex-center position-ref full-height">
                <div className="content">
                    <div className="title m-b-md">
                        Jobs
                    </div>

                    <div className="links">
                        <Link to="/jobs">Find jobs</Link>
                        <Link to="/">Find Companies</Link>
                    </div>
                </div>
            </WelcomeWrapper>
        );
    }
}