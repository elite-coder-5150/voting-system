create table `admin`
(
    `id`         int(11)      NOT NULL AUTO_INCREMENT,
    primary key (`id`),
    `username`   varchar(255) NOT NULL,
    `password`   varchar(60)  not null,
    `first_name` varchar(255) NOT NULL,
    `last_name`  varchar(255) NOT NULL,
    `email`      varchar(255) NOT NULL,
    `avatar`     varchar(255) NOT NULL,
    `avatar_url` varchar(255) NOT NULL,
    `created_at` timestamp    NOT NULL DEFAULT CURRENT_TIMESTAMP
);

create table `candidates`
(
    `candidate_id` int(11)      NOT NULL,
    primary key (`candidate_id`),
    `position_id`  int(11)      NOT NULL,
    `first_name`   varchar(255) NOT NULL,
    `last_name`    varchar(255) NOT NULL,
    `avatar`       varchar(150) not null,
    `platform`     text         not null
);

create table `positions`
(
    `position_id` int(11) unsigned NOT NULL,
    `description` varchar(255)     NOT NULL,
    `max_vote`    int(11) unsigned NOT NULL,
    `priority`    int(11) unsigned NOT NULL
);

create table `voters`
(
    `voter_id`   int(11) unsigned NOT NULL,
    `password`   varchar(255)     NOT NULL,
    `first_name` varchar(255)     NOT NULL,
    `last_name`  varchar(255)     NOT NULL,
    `avatar_url` varchar(255)     not null
);

create table `total_votes`
(
    `id`           int(11) unsigned NOT NULL,
    primary key (`id`),
    `candidate_id` int(11) unsigned NOT NULL,
    `position`     varchar(255)     NOT NULL
);

