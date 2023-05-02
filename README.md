# Voting System

#### Description

The voting system is designed to allow registered students to vote for candidates
running the an election. The system allows students to cast their votes online,
and the votes are tallied automatically.

#### System architecture

The voting system consists of a web application that runs on a web server. the
application is built using a combination oF HTML, CSS, and Javascript for the frontend,
and PHP for the backend. The app communicates with a MySQL database to store and retrieve
related data of the election.

#### User authentication

To use the voting system, users must be registered and authenticated. During the registration process, users provide
their personal information and are verified by an administrator. Once verified, users are given a unique username and
password, which they use to log in to the system.

#### Candidate management

The system allows administrators to add, edit, and remove candidates from the system. Administrators can also set the
position that each candidate is running for, and the start and end dates for the election.

#### Voting process

Registered users are allowed to vote only once in the election. Once logged in, users are presented with a list of
candidates and the positions they are running for. Users can select one candidate for each position and submit their
votes. The system ensures that each user can vote only once, and that users can only vote for candidates who are
eligible for the position.

#### Voting tally and results

The system automatically tallies the votes and generates a report of the results. The report displays the number of
votes each candidate received, as well as the percentage of the total votes. The report is only available to
administrators and is not accessible to users.

#### Security

The voting system is designed with security and privacy in mind. The system ensures that only registered users are
allowed to vote, and that each user can vote only once. User information is stored securely in the database, and the
system uses encryption to protect sensitive data such as passwords. The system also logs all activities and transactions
for auditing purposes.

#### Conclusion

The voting system is an efficient and secure way to conduct elections. The system
provides a convenient way to conduct elections. The system has a user-friendly
interface for users to case their votes , while ensuring the integrity and confidentiality
of the voting process

#### Installation all the dependencies for the project.

```shell
npm install
```
