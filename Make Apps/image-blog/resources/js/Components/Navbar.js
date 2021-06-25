import { InertiaLink } from '@inertiajs/inertia-react'
import React from 'react'

function Navbar() {
    return (
        <>
            <nav className="navbar navbar-dark navbar-expand-sm sticky-top bg-success text-uppercase text-center justify-content-center">
                <div className="container"><InertiaLink className="navbar-brand" href="#"><i className="fa fa-smile-o"></i>HAPPY TOMATO</InertiaLink><button data-toggle="collapse" className="navbar-toggler" data-target="#navcol-1"><span className="sr-only">Toggle navigation</span><span className="navbar-toggler-icon"></span></button>
                    <div className="collapse navbar-collapse justify-content-around" id="navcol-1">
                        <ul className="navbar-nav d-flex justify-content-around w-50">
                            <li className="nav-item"><InertiaLink className="nav-link active" href="/">Best Ones</InertiaLink></li>
                            <li className="nav-item"><InertiaLink className="nav-link" href="/top-images">Best RECENT</InertiaLink></li>
                            <li className="nav-item"></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </>
    )
}

export default Navbar
