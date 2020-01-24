import React, { Component } from 'react'
import { withRouter } from 'react-router'
import { Link } from "react-router-dom"


class Header extends Component {
    constructor(props) {
        super(props);
        this.state = {value: ''};

        this.handleChange = this.handleChange.bind(this);
        this.searchJob = this.searchJob.bind(this);
    }

    handleChange(event) {
      this.setState({value: event.target.value});
    }
  
    searchJob(event) {
      event.preventDefault();
      this.props.history.push(`/jobs?title=${this.state.value}`)
    }

    render() {
        return (
            <nav className="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
                <Link className="navbar-brand" to="/">Jobs</Link>
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
    
                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav mr-auto">
                        <li className="nav-item">
                            <Link className="nav-link btn btn-outline-success" to="/jobs/create">Add job <span className="sr-only">(current)</span></Link>
                        </li>
                    </ul>
                </div>
    
                <form onSubmit={this.searchJob} className="form-inline">
                    <input className="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" value={this.state.value} onChange={this.handleChange} />
                    <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        )
    }
    
}


export default withRouter(Header)