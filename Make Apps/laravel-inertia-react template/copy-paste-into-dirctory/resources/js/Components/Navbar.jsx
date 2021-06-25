import React from 'react'

function Navbar() {
    return (
        <>
            <nav className="navbar navbar-dark navbar-expand-sm sticky-top bg-success text-uppercase text-center justify-content-center">
                <div className="container"><a className="navbar-brand" href="#"><i className="fa fa-smile-o"></i>HAPPY TOMATO</a><button data-toggle="collapse" className="navbar-toggler" data-target="#navcol-1"><span className="sr-only">Toggle navigation</span><span className="navbar-toggler-icon"></span></button>
                    <div className="collapse navbar-collapse justify-content-around" id="navcol-1">
                        <ul className="navbar-nav d-flex justify-content-around w-50">
                            <li className="nav-item"><a className="nav-link active" href="index.html">Best Ones</a></li>
                            <li className="nav-item"><a className="nav-link" href="recent.html">Best RECENT</a></li>
                            <li className="nav-item"></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </>
    )
}

export default Navbar
