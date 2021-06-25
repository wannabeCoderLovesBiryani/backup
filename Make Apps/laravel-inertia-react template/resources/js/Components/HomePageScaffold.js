import React from 'react'

function HomePageScaffold() {
    return (
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

                    </section>
                </div>
            </div>
        </div>
    )
}

export default HomePageScaffold
