import React from "react"
import ReactDOM from "react-dom"
import { BrowserRouter as Router, Routes, Route } from "react-router-dom"
import HelloWorld from "./pages/HelloWorld"

function Main() {
  return (
    <Router>
      <Routes>
        <Route exact path="/" element={<HelloWorld />} />
      </Routes>
    </Router>
  )
}

export default Main

if (document.getElementById("app")) {
  ReactDOM.render(<Main />, document.getElementById("app"))
}
