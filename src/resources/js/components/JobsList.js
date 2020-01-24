import axios from 'axios'
import React, { Component } from 'react'
import { withRouter } from 'react-router-dom'
import Job from './Job'


class JobsList extends Component {
    
    constructor () {
        super()
        this.state = {
            jobs: []
        }
    }

    componentDidMount () {
        axios.get('/api/jobs' + this.props.location.search).then(response => {
            this.setState({
                jobs: response.data.data
            })
        })
    }

    render () {
        const { jobs } = this.state;
        console.log('ALOU')
        console.log(jobs)

        const jobList = jobs.map((job, idx) => {
            return <Job 
                key={idx}
                id={job.id}
                title={job.title}
                location={job.location}
                job_type={job.job_type}
                experience={job.experience}
                range_salary_initial={job.range_salary_initial}
                range_salary_final={job.range_salary_final}
            />
        });

        return (
            <div className="row">
                <div className="card-group mt-4">
                    
                    <div className="col-sm-12">
                        {
                            !jobs.length > 0 &&
                            <div className="alert alert-danger">
                                <ul>
                                    <li>Nothing found!</li>
                                </ul>	
                            </div>
                        }
                    </div>

                    {jobList}
                </div>
            </div>
        )
    }

}


const JobsListWithRouter = withRouter(JobsList);
export default JobsListWithRouter;