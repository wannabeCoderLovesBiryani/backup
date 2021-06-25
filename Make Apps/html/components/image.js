import React from "react";

class image extends React.Component {
  render() {
    return (
      <section className="clean-block clean-form dark">
        <div className="container">
          <div
            className="row"
            style={{
              marginRight: "0px",
              marginLeft: "0px"
            }}
          >
            <div
              className="col-md-12"
              style={{
                marginBottom: "25px",
                paddingLeft: "75px",
                fontSize: "21px",
                marginTop: "73px"
              }}
            >
              <a className="anone" href="listaBitacoras.html">
                <i className="fa fa-long-arrow-left" />
                <span>  Best images</span>
              </a>
            </div>
          </div>
          <div
            className="block-heading"
            style={{
              paddingTop: "0px"
            }}
          >
            <h2 className="text-primary text-success">
              Upload your image
              <br />
            </h2>
            <p>
              We support maximum 10 images. So feel free to delete any image if
              necessary.
            </p>
          </div>
          <form className="border-success">
            <div className="form-group">
              <section className="clean-block clean-form dark">
                <div
                  className="container"
                  style={{
                    padding: 0
                  }}
                >
                  <div className="form-group color">
                    <label
                      style={{
                        marginTop: "15px"
                      }}
                    >
                      Fotografía de sanitización
                    </label>
                    <div
                      className="files overflow-hidden"
                      style={{
                        width: "100%"
                      }}
                    >
                      <input
                        className="form-control-file"
                        type="file"
                        accept="image/*"
                      />
                    </div>
                  </div>
                  <hr
                    className="bg-success"
                    style={{
                      marginTop: "30px",
                      marginBottom: "10px"
                    }}
                  />
                  <hr
                    style={{
                      marginTop: "20px",
                      marginBottom: "20px"
                    }}
                  />
                  <div className="form-group">
                    <a
                      className="btn btn-primary btn-block bg-success"
                      role="button"
                      href="listaBitacoras.html"
                    >
                      <i className="fas fa-save" />
                       Save
                    </a>
                  </div>
                </div>
              </section>
            </div>
          </form>
          <hr
            style={{
              marginTop: "30px",
              marginBottom: "10px"
            }}
          />
          <hr
            style={{
              marginTop: "20px",
              marginBottom: "20px"
            }}
          />
        </div>
      </section>
    );
  }
}

export default image;
