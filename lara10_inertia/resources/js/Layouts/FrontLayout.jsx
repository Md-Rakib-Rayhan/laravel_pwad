import React from 'react'


function FrontLayout({ children }) {
  return (
    <>
        <nav className="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div className="container">
                <a className="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i className="fas fa-bars ms-1" />
                </button>
                <div style={{visibility: "visible"}} className="collapse navbar-collapse" id="navbarResponsive">
                <ul className="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li className="nav-item"><a className="nav-link" href="#services">Services</a></li>
                    <li className="nav-item"><a className="nav-link" href="#portfolio">Portfolio</a></li>
                    <li className="nav-item"><a className="nav-link" href="#about">About</a></li>
                    <li className="nav-item"><a className="nav-link" href="about">About</a></li>
                    <li className="nav-item"><a className="nav-link" href="#team">Team</a></li>
                    <li className="nav-item"><a className="nav-link" href="#contact">Contact</a></li>
                    
                </ul>
                </div>
            </div>
        </nav>


        {children}

        <footer className="footer py-4">
            <div className="container">
                <div className="row align-items-center">
                <div className="col-lg-4 text-lg-start">Copyright © Your Website 2023</div>
                <div className="col-lg-4 my-3 my-lg-0">
                    <a className="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i className="fab fa-twitter" /></a>
                    <a className="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i className="fab fa-facebook-f" /></a>
                    <a className="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i className="fab fa-linkedin-in" /></a>
                </div>
                <div className="col-lg-4 text-lg-end">
                    <a className="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a className="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
                </div>
            </div>
        </footer>



    </>
  )
}

export default FrontLayout