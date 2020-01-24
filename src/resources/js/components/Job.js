import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class Job extends Component {
    
    constructor () {
        super()
    }

    render () {
        const {
            id, title,
            location, job_type, experience,
            range_salary_initial, range_salary_final 
        } = this.props;
        
        return (
            <div className="col-sm-4">
                <div className="card" style={{width: "18rem", margin:"5px"}}>
                    <div className="card-body">
                        <h5 className="card-title">{title}</h5>
                        <p className="card-text"></p>
                    </div>
                    <ul className="list-group list-group-flush">
                        <li className="list-group-item">{location}</li>
                        <li className="list-group-item">{job_type}</li>
                        <li className="list-group-item">{experience}</li>
                        <li className="list-group-item">{range_salary_initial}</li>
                        <li className="list-group-item">{range_salary_final}</li>
                    </ul>

                    <div className="card-body">
                        <div className="d-flex flex-row">
                            <div className="p-2">
                                <a href=""> <button className="btn btn-primary" type="submit"> <i className="material-icons">edit</i> </button> </a>
                            </div>	
                            <div className="p-2">
                                <button className="btn btn-danger" type="submit"> <i className="material-icons">delete</i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }

}

export default Job;