<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <!-- MATERIAL CDN -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
        <!-- STYLESHEET -->
        <link rel="stylesheet" href="./style.css">
        <!-- SCRIPT -->
         <script defer src="./script.js"></script>
    </head>
    <body>
        <div class="container">
            <!--------- START OF ASIDE---------->
            <aside>
                <div class="top">
                    <div class="logo">
                        <img src="./images/logo.png" alt="Logo">
                        <h2>EGA<span class="danger">TOR</span></h2>
                    </div>
                    <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                    </div>
                </div>

                <div class="sidebar">
                    <a href="#" class="active">
                        <span class="material-icons-sharp">dashboard</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">person</span>
                        <h3>Customers</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">receipt_long</span>
                        <h3>Orders</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">insights</span>
                        <h3>Analytics</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">email</span>
                        <h3>Messages</h3>
                        <span class="message-count">26</span>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">inventory_2</span>
                        <h3>Products</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">report</span>
                        <h3>Reports</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">settings</span>
                        <h3>Settings</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">add</span>
                        <h3>Add Product</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Logout</h3>
                    </a>
                </div>
            </aside>
            <!--------- END OF ASIDE ---------->

            <!--------- START OF DASBOARD ---------->
            <main>
                <h1>Dashboard</h1>

                <div class="date">
                    <input type="date">
                </div>

                <!-- START OF INSIGHTS -->
                <div class="insights">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h1>€25.023</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="37" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>81%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Houres</small>
                    </div>
                    <!--------- END OF SALES---------->
                    <div class="expenses">
                        <span class="material-icons-sharp">bar_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Expenses</h3>
                                <h1>€14.023</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="37" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Houres</small>
                    </div>
                    <!--------- END OF EXPENSES---------->
                    <div class="income">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Income</h3>
                                <h1>€30.023</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="37" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>44%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Houres</small>
                    </div>
                    <!--------- END OF INCOME ---------->
                </div>
                <!--------- END OF INSIGHTS ---------->

                <!--------- START OF ORDERS ---------->
                <div class="recent-orders">
                    <h2>Recent Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Number</th>
                                <th>Payment</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Folable Mini Drone</td>
                                <td>85621</td>
                                <td>Due</td>
                                <td class="warning">pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>Folable Mini Drone</td>
                                <td>85621</td>
                                <td>Due</td>
                                <td class="warning">pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>Folable Mini Drone</td>
                                <td>85621</td>
                                <td>Due</td>
                                <td class="warning">pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>Folable Mini Drone</td>
                                <td>85621</td>
                                <td>Due</td>
                                <td class="warning">pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>Folable Mini Drone</td>
                                <td>85621</td>
                                <td>Due</td>
                                <td class="warning">pending</td>
                                <td class="primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#">Show All</a>
                </div>
                <!--------- END OF ORDERS ---------->
            </main>
            <!--------- END OF MAIN ---------->

            <!--------- START OF TOPBAR ---------->
            <div class="right">
                <div class="top">
                   <button id="menu-btn">
                        <span class="material-icons-sharp">menu</span>
                   </button> 
                   <div class="theme-toggler">
                        <span class="material-icons-sharp active">light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                   </div>
                   <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Jaimy</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="./images/profile-1.jpg" alt="profile">
                        </div>
                   </div>
                </div>
                <!---------- END OF TOPBAR ---------->
                
                <!---------- START OF UPDATES ---------->
                <div class="recent-updates">
                    <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/profile-2.jpg" alt="profile">
                            </div>
                            <div class="message">
                                <p><b>Mike Tyson</b> Recieved his order of Night lion tech GPS drone.</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/profile-3.jpg" alt="profile">
                            </div>
                            <div class="message">
                                <p><b>Mike Tyson</b> Recieved his order of Night lion tech GPS drone.</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/profile-4.jpg" alt="profile">
                            </div>
                            <div class="message">
                                <p><b>Mike Tyson</b> Recieved his order of Night lion tech GPS drone.</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------- END OF UPDATES ---------->
                <div class="sales-analytics">
                    <h2>Sales Analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">shopping_cart</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>ONLINE ORDERS</h3>
                                <small class="text-muted">Last 34 Hours</small>
                            </div>
                            <h5 class="success">+39%</h5>
                            <h3>3478</h3>
                        </div>
                    </div>
                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">local_mall</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>OFFLINE ORDERS</h3>
                                <small class="text-muted">Last 34 Hours</small>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>1100</h3>
                        </div>
                    </div>
                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp">person</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>NEW CUSTOMERS</h3>
                                <small class="text-muted">Last 34 Hours</small>
                            </div>
                            <h5 class="success">+25%</h5>
                            <h3>865</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Product</h3>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </body>
</html>