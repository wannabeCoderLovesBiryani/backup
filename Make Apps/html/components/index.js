import React from "react";

class index extends React.Component {
  render() {
    return (
      <div>
        <nav className="navbar navbar-dark navbar-expand-sm sticky-top bg-success text-uppercase text-center justify-content-center">
          <div className="container">
            <a className="navbar-brand" href="#">
              <i className="fa fa-smile-o" />
              HAPPY TOMATO
            </a>
            <button
              data-toggle="collapse"
              className="navbar-toggler"
              data-target="#navcol-1"
            >
              <span className="sr-only">Toggle navigation</span>
              <span className="navbar-toggler-icon" />
            </button>
            <div
              className="collapse navbar-collapse justify-content-around"
              id="navcol-1"
            >
              <ul className="navbar-nav d-flex justify-content-around w-50">
                <li className="nav-item">
                  <a className="nav-link active" href="index.html">
                    Best Ones
                  </a>
                </li>
                <li className="nav-item">
                  <a className="nav-link" href="recent.html">
                    Best RECENT
                  </a>
                </li>
                <li className="nav-item" />
              </ul>
            </div>
          </div>
        </nav>
        <div className="container">
          <div className="row">
            <div className="col-md-4 border border-success py-3 mt-5 sticky-sun">
              <figure className="figure border border-warning mt-sm-2 mt-md-4">
                <img
                  className="figure-img sunny-image"
                  src="assets/img/sunny.gif"
                />
                <hr className="bg-warning" />
                <figcaption className="figure-caption text-center text-monospace text-warning">
                  See the sunny side of the quarantine!
                </figcaption>
              </figure>
            </div>
            <div className="col-md-8">
              <section className="bg-white">
                <div className="container-fluid">
                  <div className="row">
                    <div className="col-md-12 col-lg-12">
                      <div className="border border-success mt-sm-2 mt-md-5">
                        <h1
                          className="text-dark mt-3 border-success"
                          style={{
                            paddingTop: "20px",
                            paddingLeft: "15px",
                            paddingRight: "15px"
                          }}
                        >
                          Stay happy in quarantine!
                        </h1>
                        <hr />
                        <p
                          className="text-black-50"
                          style={{
                            paddingLeft: "15px",
                            paddingRight: "15px"
                          }}
                        >
                          The quarantine is not an awesome time. It's not a
                          funny time.
                          <em>
                             Although the quarantine has caused incredible
                            damage to economy, resulted in friends being
                            alienated from each other, and total stoppage of
                            human society, let's just forget all thoughts for a
                            moment.
                          </em>
                          <span className="text-success">
                            Let's have a good laugh instead. 
                            <strong>Laughter helps a lot, sometimes!</strong>
                          </span>
                          <br />
                          <br />
                        </p>
                      </div>
                      <div className="border border-success mt-2">
                        <h1 className="p-2">Here are our top images</h1>
                        <hr />
                        <p
                          className="text-black-50"
                          style={{
                            paddingLeft: "15px",
                            paddingRight: "15px"
                          }}
                        >
                          View these images recently added by visitors to the
                          website. Feel free to add your image<em>.</em>
                          <span className="text-danger">
                             Also if you wish you may delete any messages you
                            want to.
                          </span>
                          <br />
                          <br />
                        </p>
                      </div>
                      <hr className="bg-success" />
                      <div className="card">
                        <div className="card-body border border-success">
                          <h4 className="card-title">Funny meme!</h4>
                          <img
                            src="assets/img/office-front.jpeg"
                            style={{
                              width: "100%"
                            }}
                          />
                          <div className="d-flex justify-content-around shadow my-2 p-3">
                            <i className="fa fa-thumbs-o-up" />
                            <i className="fa fa-thumbs-o-down" />
                            <i className="fa fa-trash-o" />
                          </div>
                        </div>
                      </div>
                      <div
                        style={{
                          textAlign: "center"
                        }}
                      />
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <footer className="footer-basic">
          <div className="social">
            <a href="#">
              <i className="icon ion-social-instagram" />
            </a>
            <a href="#">
              <i className="icon ion-social-snapchat" />
            </a>
            <a href="#">
              <i className="icon ion-social-twitter" />
            </a>
            <a href="#">
              <i className="icon ion-social-facebook" />
            </a>
          </div>
          <ul className="list-inline">
            <li className="list-inline-item">
              <a href="#">Home</a>
            </li>
            <li className="list-inline-item">
              <a href="#">Services</a>
            </li>
            <li className="list-inline-item">
              <a href="#">About</a>
            </li>
            <li className="list-inline-item">
              <a href="#">Terms</a>
            </li>
            <li className="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p className="copyright">Company Name © 2021</p>
        </footer>
      </div>
    );
  }
}

export default index;
