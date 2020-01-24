import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import JobsList from './JobsList'
import JobCreate from './JobCreate'
import Welcome from './Welcome'


class App extends Component {
    render () {
    return (
        <BrowserRouter>
        <div>
            <Header />
            <Switch>
                <Route exact path='/' component={Welcome} />
                <Route exact path='/jobs' component={JobsList} />
                <Route exact path='/jobs/create' component={JobCreate} />
            </Switch>
        </div>
        </BrowserRouter>
    )
    }
}


ReactDOM.render(<App />, document.getElementById('app'))