import React from 'react'

function HomePageScaffold({title, image, likes}) {
    return (
        <>
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
            </section>
        </>
    )
}

export default HomePageScaffold
