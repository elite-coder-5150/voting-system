create table `votes`
(
    `vote_id`      int(11) unsigned NOT NULL auto_increment,
    primary key (`vote_id`),
    `position_id`  int(11) unsigned NOT NULL,
    `candidate_id` int(11) unsigned NOT NULL,
    `voters_id`    int(11) unsigned NOT NULL
);

create table `candidates`
(
    `candidate_id` int(11) unsigned NOT NULL auto_increment,
    primary key (`candidate_id`),
    `first_name`   varchar(255)     NOT NULL,
    `last_name`    varchar(255)     NOT NULL
);

create table `positions`
(
    `position_id`   int(11) unsigned NOT NULL,
    primary key (`position_id`),
    `position_name` varchar(255)     NOT NULL,
    `priority`      int(11) unsigned NOT NULL
);

create table `voters`
(
    `voter_id` int(11) unsigned NOT NULL,
    `name`     varchar(255)     NOT NULL
);
