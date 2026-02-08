import Frontlayout from "@/Layouts/Frontlayout";
import React from "react";
import "../../assets/css/bootstrap.min.css";
import "../../assets/css/style.css";

function ProductEntry() {
    return (
        <>
            <Frontlayout>
                <div className="container-fluid py-5">
                    <div className="container">
                        <div className="row gx-5">
                            <div className="col-lg-12">
                                <div className="mb-4">
                                    <h5 className="d-inline-block text-primary text-uppercase border-bottom border-10">
                                        Prduct Entry
                                    </h5>
                                </div>
                                <form action="">
                                    <input type="text" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </Frontlayout>
        </>
    );
}

export default ProductEntry;
