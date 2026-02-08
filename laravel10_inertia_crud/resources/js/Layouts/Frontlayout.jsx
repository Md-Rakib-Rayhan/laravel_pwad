import React from "react";
import Topbar from "@/Components/Topbar";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";

function Frontlayout({ children }) {
    return (
        <>
            <Topbar />
            
            <Navbar/>
            

            {children}

            <Footer/>
        </>
    );
}

export default Frontlayout;
