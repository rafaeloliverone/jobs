import axios from 'axios'
import React, { Component } from 'react'
import { withRouter } from 'react-router'
import { Link } from 'react-router-dom'

class JobCreate extends Component {
    constructor(props) {
        super(props);
        this.state = {
            formControls: {}
        }
        this.changeHandler = this.changeHandler.bind(this);
        this.handleAddJob = this.handleAddJob.bind(this);
    }

    changeHandler(event) {
        const name = event.target.name;
        const value = event.target.value;
      
        this.setState({
            formControls: {
              [name]: value
            }
        });
      
    }

    handleAddJob(event) {
        axios.post('/api/jobs/store', this.state.formControls).then(response => {
            this.props.history.push(`/jobs?title=${this.state.formControls.title}`)
        })
    }
    

    render () {
        return (
            <div className="card">
                <div className="card-body ">
                    <form method="post" style={{marginTop: "50px"}} onSubmit={this.handleAddJob}>
                        <div className="form-row ">
                            <div className="form-group col-md-6">
                                <label htmlFor="title">Title</label>
                                <input type="text" className="form-control" id="title" name="title" onChange={this.changeHandler} />
                            </div>
            
                            <div className="form-group col-md-6">
                                <label htmlFor="location">Location</label>
                                <input type="text" className="form-control" id="location" name="location" onChange={this.changeHandler} />
                            </div>
                        </div>
            
                        <div className="form-group">
                            <label htmlFor="challenge">Challenge</label>
                            <input type="text" className="form-control" id="challenge" name="challenge" onChange={this.changeHandler} />
                        </div>
            
                        <div className="form-group">
                            <label htmlFor="description">Description</label>
                            <input type="text" className="form-control" id="description" name="description" onChange={this.changeHandler} />
                        </div>
            
                        <div className="form-row">
                            <div className="form-group col-md-6">
                                <label htmlFor="skills">Skills</label>
                                <input type="text" className="form-control" id="skills" name="skills" onChange={this.changeHandler} />
                            </div>
            
                            <div className="form-group col-md-3">
                                <label htmlFor="experience">Experience</label>
                                <input type="number" className="form-control" id="experience" name="experience" onChange={this.changeHandler} />
                            </div>
            
                            <div className="form-group col-md-3">
                                <label htmlFor="jobType">Job Type</label>
                                <input type="text" className="form-control" id="jobType" name="job_type" onChange={this.changeHandler} />
                            </div>
                        </div>
            
                        <div className="form-row">
                            <div className="form-group col-md-3">
                                <label htmlFor="salaryInitial">Salary initial</label>
                                <input type="number" className="form-control" id="salaryInitial" name="range_salary_initial" onChange={this.changeHandler} />
                            </div>
            
                            <div className="form-group col-md-3">
                                <label htmlFor="salaryFinal">Salary final</label>
                                <input type="number" className="form-control" id="salaryFinal" name="range_salary_final" onChange={this.changeHandler} />
                            </div>
            
                            <div className="form-group col-md-3">
                                <label htmlFor="company">Company Id</label>
                                <input type="number" className="form-control" id="company" name="company_id" onChange={this.changeHandler} />
                            </div>
                                                        
                            <div className="form-group col-md-3">
                                <label htmlFor="hiringContact">Hiring Contact</label>
                                <input type="number" className="form-control" id="hiringContact" name="hiring_contact" onChange={this.changeHandler} />
                            </div>
                        </div>
            
                        <button type="submit" className="btn btn-primary">Add job</button>
                    </form>      
                </div>                   
            </div>
        )
    }

}

export default withRouter(JobCreate);